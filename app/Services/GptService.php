<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GptService
{
    private string $systemPrompt = <<<PROMPT
You are a licensed professional psychologist.
You communicate warmly, calmly, and supportively.
You do not diagnose or prescribe medication.
You validate feelings, encourage healthy coping, and suggest professional help when appropriate.
Your tone is comforting, friendly, and safe.
PROMPT;

    public function ask(array $context): string
    {
        $input = [
            ['role' => 'system', 'content' => $this->systemPrompt],
        ];

        foreach ($context as $msg) {
            $input[] = [
                'role' => $msg['role'],
                'content' => $msg['content'],
            ];
        }

        $response = Http::withToken(config('services.openai.key'))
            ->timeout(60)
            ->post('https://api.openai.com/v1/responses', [
                'model' => config('services.openai.model'),
                'input' => $input,
            ]);

        if (!$response->successful()) {
            return 'Maaf, aku sedang mengalami kendala teknis. Kita bisa coba lagi sebentar ya.';
        }

        // Ambil teks output
        $output = '';
        $data = $response->json();

        if (isset($data['output']) && is_array($data['output'])) {
            foreach ($data['output'] as $item) {
                if (($item['type'] ?? '') === 'message' && isset($item['content'])) {
                    foreach ($item['content'] as $c) {
                        if (($c['type'] ?? '') === 'output_text') {
                            $output .= $c['text'];
                        }
                    }
                }
            }
        }

        return trim($output) !== '' ? trim($output)
            : 'Terima kasih sudah berbagi. Aku di sini untuk mendengarkanmu.';
    }
}

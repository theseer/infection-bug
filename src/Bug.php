<?php declare(strict_types = 1);

class Bug {

    public function test(array $data): array {
        $result = [];
        foreach($data as $value) {
            if (!$this->isOkay($value)) {
                continue;
            }

            $result[] = $value;
        }

        return $result;
    }

    private function isOkay(string $input): bool {
        return $input !== 'b';
    }

}

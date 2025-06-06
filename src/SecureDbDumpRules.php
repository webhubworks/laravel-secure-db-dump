<?php

namespace Webhub\SecureDbDump;

class SecureDbDumpRules
{
    public function __invoke(): array
    {
        return [
            'users' => [
                AnonymizerConfig::make()
                    ->field('name')
                    ->type('faker')
                    ->method('name')
                    ->where('email', fn ($value) => ! str($value)->endsWith('@webhub.de')),
                AnonymizerConfig::make()
                    ->field('email')
                    ->type('faker')
                    ->method('email')
                    ->where('email', fn ($value) => ! str($value)->endsWith('@webhub.de')),
                AnonymizerConfig::make()
                    ->field('password')
                    ->type('static')
                    ->value('$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi')
                    ->where('email', fn ($value) => ! str($value)->endsWith('@webhub.de')),
            ],
            /*'cars' => [
                AnonymizerConfig::make()
                    ->field('licence_plate')
                    ->type('faker')
                    ->method('regexify')
                    ->args(['LG [A-Z]{2} [0-9]{2,4}']),
            ],*/
        ];
    }
}

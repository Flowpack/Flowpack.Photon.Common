<?php
namespace Flowpack\Photon\Common\Generator;

interface GeneratorInterface {

    public function generate(string $packageKey, string $targetName, array $options): array;

}

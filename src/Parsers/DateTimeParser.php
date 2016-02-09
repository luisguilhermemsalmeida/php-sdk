<?php namespace Konduto\Parsers;

class DateTimeParser implements IParser {

    protected $outputFormat;

    public function __construct($format) {
        $this->outputFormat = $format;
    }

    public function parse($value) {
        return is_string($value) ? new \DateTime($value) : $value;
    }

    public function unparse($value) {
        if (is_a($value, 'DateTime')) {
            $value = date_format($value, $this->outputFormat);
        }
        return $value;
    }
}
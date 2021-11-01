<?php

namespace SKprods\LaravelHelpers\Support;

use Symfony\Component\Console\Output\ConsoleOutput as BaseConsoleOutput;

class ConsoleOutput
{
    private ?BaseConsoleOutput $output = null;

    public function __construct()
    {
        $this->setOutput();
    }

    public function info(string $message)
    {
        $this->line($message, 'info');
    }

    public function comment(string $message)
    {
        $this->line($message, 'comment');
    }

    public function error(string $message)
    {
        $this->line($message, 'error');
    }

    protected function line(string $message, string $style = null)
    {
        $styled = ($style) ? "<$style>$message</$style>" : $message;
        $this->output->writeln($styled);
    }

    private function setOutput()
    {
        if (!$this->output) {
            $this->output = app(BaseConsoleOutput::class);
        }
    }
}
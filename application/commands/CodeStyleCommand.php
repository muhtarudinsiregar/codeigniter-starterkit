<?php
namespace Application\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CodeStyleCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('codestyle')
            ->setDescription('Sniff codestyle for controller')
            ->addArgument('filepath', InputArgument::REQUIRED, 'Filepath is required');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $filepath = $input->getArgument('filepath');
        
        $output->writeln(exec('php --help'));

        return 0;
    }
}
/* End of file CodeStyle.php */
/* Location: .//D/#Development/#Github/codeigniter-starterkit/command/CodeStyle.php */

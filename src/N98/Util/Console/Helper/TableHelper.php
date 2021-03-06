<?php

namespace N98\Util\Console\Helper;

use Symfony\Component\Console\Helper\TableHelper as BaseTableHelper;
use Symfony\Component\Console\Helper\Helper as AbstractHelper;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Text Table Helper
 * @author Timothy Anido <xanido@gmail.com>
 *
 * Based on draw_text_table by Paul Maunders
 * Available at http://www.pyrosoft.co.uk/blog/2007/07/01/php-array-to-text-table-function/
 */
class TableHelper extends BaseTableHelper
{
    /**
     * Takes a 2 dimensional tabular array (or iterable object) and outputs an ascii table
     *
     * @deprecated Use original Symfony table helper
     * @param  OutputInterface $output
     * @param  array           $table
     * @param  int             $crop    Maximum column width
     * @param  boolean         $rowKeys Display the keys as first column
     */
    public function write(OutputInterface $output, $table, $crop = null, $rowKeys = false)
    {
        $this->setHeaders(array_keys($table[0]));
        $this->setRows($table);

        return $this->render($output);
    }
}
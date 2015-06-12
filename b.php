<?php
//$content = 'You already submitted a transaction inquiry for this Order ID. Please check your Transaction Inquiry log for status.';
//$content = 'all.orderinquiry.error.orderid.already.exists';
//preg_match('/orderid\.already\.exists|You\s*already\s*submitted\s*a\s*transaction/i', $content, $matches);
//print_r($matches);
//exit;

class test {
    protected $note;
    
    public function note($note)
    {
        $this->note = $note;
    }
}

$temp = new test();
$temp->note('aaa');
$tests[] = $temp;

$temp = new test();
$temp->note('bbb');
$tests[] = $temp;

$temp = new test();
$temp->note('ccc');
$tests[] = $temp;

print_r($tests);
$temp = $tests[1];
$temp->note('wo shi test');
print_r($tests);


<?php
/*
	Bitcoin Webskin - an open source PHP web interface to bitcoind
	Copyright (c) 2011 14STzHS8qjsDPtqpQgcnwWpTaSHadgEewS
*/
?><?php $this->template('header'); ?>
<pre><b>getaddressesbyaccount</b><hr />
<?php 


	isset( $this->getaddressesbyaccount )
		? print_r($this->getaddressesbyaccount)
		: print "Error: getaddressesbyaccount not set";
		
?> 
</pre>
<?php $this->template('footer'); ?>
<?php
# getting to know variable

	# Integers and Doubles
	echo "Hello PHP";
	print "<br>";
	$int_var = 12345;
	$another_int = 1235 + 123.46;
	echo $another_int;
	print "<br>";
	print ($another_int);
	print "<br>";

	# Boolean
	$num = 0;
	if(num) {
		echo "  false";
		print "<br>";
	} else  {
		echo "true";
	}
	# Strings
	$var = "name";
	$random = 'my $var will print';
	print($random);
	print "<br>";
	$random = "my $var will print";
	print($random);

	# Uses of XML Document to have more than one line

	$channel = <<< _XML_
		<channel>
			<tit>What's for dinner</tit>
			<link>http://menu.example.com/ </link>
		</channel>
_XML_;
print "<br>";
print "sumran";
print "<br>";
print($channel);
print "<br>";

	# learning the Use of Constants
	define ("MINSIZE", 50);
	echo MINSIZE;
	print "<br>";
	echo constant("MINSIZE");

	# Done with the use of operatos
		# arrithmetic, Comparison
		# Logical Operators , Assignment Operators

	# Condition operator
	$a = 10;
	$b = 20;
	$result = ($a < $b) ? $a : $b;
	print "<br>";
	echo $result;



?>

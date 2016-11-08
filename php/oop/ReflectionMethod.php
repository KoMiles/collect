<?php
class HelloWorld {

    public function sayHelloTo($name) {
        return 'Hello ' . $name;
    }
}

$reflectionMethod = new ReflectionMethod('HelloWorld', 'sayHelloTo');
echo $reflectionMethod->invokeArgs(new HelloWorld(), array('Mike'));

echo "--------------------------------- \n";

class HelloWorldNew {

    public function sayHelloTo($name) {
        return 'Hello ' . $name;
    }

}

$reflectionMethod = new ReflectionMethod('HelloWorldNew', 'sayHelloTo');
echo $reflectionMethod->invoke(new HelloWorldNew(), 'Mike');
?>

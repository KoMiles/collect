<?php
class Class1{
    public $var1 = 'var1';
    public $var2 = 'var2';
    private $var3 = 'var3';
 
    public function method1(){}
    public function method2(){}
    private function method3(){}
}

print_r(get_class_methods(Class1));
print_r(get_class_vars(Class1));
//用反射类可以获得私有属性和私有方法
$ref = new ReflectionClass(Class1);
 
//print_r($ref->getMethods());
print_r($ref->getProperties());

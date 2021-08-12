<?php
    class a
    {
        final function describe()
        {
            echo "This is from Base class.";
        }
    }

    class b extends a
    {
        public function describe()
        {
            echo "This is from Derived class.";
        }
    }

    $obj= new b();
    $obj->describe();
?>
<nav>
<ul>
    <li @yield('class')>{{ link_to("work","work",array('class' => 'colored-link')) }}</li>
    <li @yield('class')>{{ link_to("me","me",array('class' => 'colored-link')) }}</li>
    <li @yield('class')>{{ link_to("contact","contact",array('class' => 'colored-link')) }}</li>
 </ul>
</nav>
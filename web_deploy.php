$php 
$deploy()
$connect[
  natrix-db
  user: $pass 
  pass: $user
]

$worker : node
$main(file)=> "main.html, style.css, index.js" => user = "natrix"

$deploy-to-heroku => domain [
        name: $name.com
        port: $port
    ]
$nodeTo:{connect;db;natrix;js;to-js-code$jscode}
$nodeAt:{node.js/$node-vserion}


entryPoint()

[php to win=> .net78]({)4}

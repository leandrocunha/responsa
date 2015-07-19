# responsa
The grid system to designers free to create and developers free to responsive easily

#Designers free to create, Developers free to responsive easily

#Simple and real workflows to modern and pixel-perfect apps
But how this works?

1) Designers can be frameworks-grid free<br />
2) Fron-End developers can set customs grid exactly within Photoshop pixel sizes<br />
3) After be prepocessed, your custom grid will be all converted to responsive format<br />

#Example

##app.styl
<pre>
body
  .container
    container(1024px)

  .row
    row()

  #m
    .columns
      .column-left
        column(300px, gutter: 10px, 1024px)

      .column-right
        column(724px, gutter: 10px, 1024px)
</pre>


##app.css
<pre>
body .container {
    margin: 0 auto;
    max-width: 1024px;
    padding: 0 10px;
}

body .row {
    margin-right: -10px;
    margin-left: -10px;
}

body #m .columns .column-left {
    float: left;
    padding: 0 10px;
    width: 29.296875%
}

body #m .columns .column-right {
    float: left;
    padding: 0 10px;
    width: 70.703125%
}
</pre>

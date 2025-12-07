<?php if (!is_active_sidebar("sidebar-1")) : ?>
<!--Fallback här ifall inga widgets är aktiva-->
<aside id="sidebar">
  <ul>
    <li>
      <h2>Sidebar</h2>
    </li>
  </ul>
</aside>
<?php else : ?>
  <aside id ="sidebar">
    <ul>
      <?php dynamic_sidebar("sidebar-1"); ?>
    </ul>
  </aside>
  <?php endif; ?>

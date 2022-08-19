<footer class="content-info fixed bottom-0" style="display: flex">
  @php(dynamic_sidebar('sidebar-footer'))
  @php(wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer_navigation']) )
</footer>

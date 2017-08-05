<?php

class walkerHeaderMenu extends Walker_Nav_Menu {

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $li_classes = array( 'header__navigation__item' );

    if ( $item->current ) {
      $li_classes[] = 'header__navigation__item--active';
    }

    $li_classes = implode( $li_classes, ' ' );

    $output .= "<li class='{$li_classes}'>";
    $output .= "<a href='{$item->url}'>";
    $output .= $item->title;
    $output .= "</a>";
  }

}

class walkerFooterMenu extends Walker_Nav_Menu {

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $li_classes = array( 'footer__navigation__item layout__sm__6 layout__md__6 layout__lg__6' );

    if ( $item->current ) {
      $li_classes[] = 'footer__navigation__item--active';
    }

    $li_classes = implode( $li_classes, ' ' );

    $output .= "<li class='{$li_classes}'>";
    $output .= "<a href='{$item->url}'>";
    $output .= $item->title;
    $output .= "</a>";
  }

}

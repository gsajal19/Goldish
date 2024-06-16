<?php include 'config.php';?>
<div class="c-header-search disabled js-ajax-search">
  <div class="c-header-search__wrap">
    <div class="c-header-search__shadow js-search-close"></div>
    <div class="c-header-search__form">
      <div class="c-header-search__tip">What are you looking for?</div>
      <form
        role="search"
        class="js-search-form"
        method="get"
        action="#"
      >
        <div class="c-header-search__input-block">
          <input
            class="js-ajax-search-input c-header-search__input"
            autocomplete="off"
            type="text"
            name="s"
            placeholder="Start typing..."
            value=""
          />
          <button
            class="js-search-clear h-cb c-header-search__clear"
            type="button"
          >
            <i class="fa fa-window-close-o c-header-search__clear-svg"></i
            ><span class="c-header-search__clear-text">Clear</span>
          </button>
        </div>
        <input
          type="hidden"
          name="post_type"
          value="product"
          class="js-ajax-search-type"
        />
      </form>
    </div>
    <div
      class="l-section l-section--container c-header-search__result js-ajax-search-result"
    ></div>
    <button
      type="button"
      class="h-cb h-cb--svg c-header-search__close js-search-close"
    >
      <i class="fa fa-window-close-o"></i>
    </button>
  </div>
</div>
<header class="l-section l-header" id="main-header">
  <div
    class="c-header__outer c-header__outer--mobile c-header__outer--tr c-header__outer--header-type-1 c-header__outer--header-type-mobile-2"
  >
    <div
      class="c-header c-header--tr c-header--header-type-1 c-header--header-type-mobile-2 c-header--buttons-1 c-header--mobile js-header-mobile"
    >
      <div class="c-header__row c-header__row--logo-left">
        <button
          class="h-cb h-cb--svg c-header__menu-button js-mobile-menu-open"
          type="button"
          aria-label="Mobile Menu"
        >
          <i class="fa fa-bars c-header__menu-button-icon"></i>
        </button>
        <div
          class="c-header__logo c-header__logo--mobile c-header__logo--sticky"
        >
          <a
            href="<?php echo $domain;?>"
            class="c-header__logo-link"
          >
            <img
              width="140"
              height="14"
              src="<?php echo $domain; ?>asset/images/logos/goldlogo.png"
              alt="Goldish"
              class="c-header__logo-img c-header__logo-img--mobile c-header__logo-img--svg"
            />
            <img
              width="140"
              height="14"
              src="<?php echo $domain; ?>asset/images/logos/whitelogo.png"
              alt="Goldish"
              class="c-header__logo-img c-header__logo-img--sticky c-header__logo-img--svg"
            />
          </a>
        </div>
        <div
          class="c-header__col-mobile-buttons c-header__col-mobile-buttons--1"
        >
          <div class="c-header__cart c-header__cart--default js-cart">
            <a
              class="c-header__button-link js-cart-sidebar-open"
              href="<?php echo $domain;?>shop/cart/"
              aria-label="Shopping cart"
            >
              <i class="fa fa-shopping-cart c-header__cart-icon h-hide-mobile"></i
              ><i class="fa fa-shopping-cart c-header__cart-icon h-hide-desktop"></i
              ><span class="js-cart-info"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="c-shop-sidebar c-shop-sidebar--mobile-only js-cart-sidebar">
    <div class="c-shop-sidebar__wrap js-cart-sidebar-wrap">
      <div class="c-shop-sidebar__buttons">
        <button
          type="button"
          class="h-cb h-cb--svg c-shop-sidebar__close js-cart-sidebar-close"
        >
          <i class="fa fa-window-close-o"></i>
        </button>
      </div>
      <div class="c-shop-sidebar__content c-shop-sidebar__content--popup">
        <div class="widget_shopping_cart_content"></div>
      </div>
    </div>
  </div>
  <div class="c-shop-sidebar__shadow js-cart-sidebar-shadow"></div>
  <div
    class="c-header__menu c-header--mobile c-header__menu--header-type-mobile-2 js-mobile-menu"
  >
    <div class="c-header__menu-shadow"></div>
    <div class="c-header__menu-buttons">
      <button
        type="button"
        class="h-cb h-cb--svg c-header__menu-back js-mobile-menu-back"
      >
        <i class="fa fa-angle-left c-header__menu-back-svg"></i>
      </button>
      <button
        type="button"
        class="h-cb h-cb--svg c-header__menu-close js-mobile-menu-close"
      >
        <i class="fa fa-window-close-o c-header__menu-close-svg"></i>
      </button>
    </div>
    <div class="c-header__menu-content">
      <div class="c-header__menu-wrap js-mobile-menu-wrap"></div>
      <nav
        itemscope
        itemtype="http://schema.org/SiteNavigationElement"
        class="c-mobile-menu c-mobile-menu--top-menu js-mobile-top-menu"
      >

        <ul id="mobile-top-menu" class="c-mobile-menu__list">
          <li
            id="menu-item-207"
            class="c-mobile-menu__item menu-item-207 "
          >
            <a href="<?php echo $domain; ?>">Home</a>
            
          </li>
          <li
            id="menu-item-209"
            class="c-mobile-menu__item  menu-item-209"
          >
            <a href="#">Shop</a>
            
          </li>
          <li
            id="menu-item-208"
            class="c-mobile-menu__item c-mobile-menu__item--has-children menu-item-208"
          >
            <a href="#">Explore</a>
            <ul class="c-mobile-menu__submenu">
              <li
                id="menu-item-1949"
                class="c-mobile-menu__subitem c-mobile-menu__subitem--has-children menu-item-1949"
              >
                <span class="a">Necklace</span>
                <ul
                  class="c-mobile-menu__submenu c-mobile-menu__submenu--inner"
                >
                  <li
                    id="menu-item-2038"
                    class="c-mobile-menu__subitem menu-item-2038"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/necklace/"
                      >Necklace</a
                    >
                  </li>
                  <li
                    id="menu-item-1994"
                    class="c-mobile-menu__subitem menu-item-1994"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/necklace/<?php echo urlencode("long haar");?>/"
                      >Long Haar</a
                    >
                  </li>
                  <li
                    id="menu-item-1993"
                    class="c-mobile-menu__subitem menu-item-1993"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/necklace/<?php echo urlencode("choker");?>/"
                      >Choker</a
                    >
                  </li>
                  <li
                    id="menu-item-1992"
                    class="c-mobile-menu__subitem menu-item-1992"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/necklace/<?php echo urlencode("Mangalsutra");?>/"
                      >Mangalsutra</a
                    >
                  </li>
                 
                </ul>
              </li>
              <li
                id="menu-item-1950"
                class="c-mobile-menu__subitem c-mobile-menu__subitem--has-children menu-item-1950"
              >
                <span class="a">Pendants</span>
                <ul
                  class="c-mobile-menu__submenu c-mobile-menu__submenu--inner"
                >
                  <li
                    id="menu-item-3510"
                    class="c-mobile-menu__subitem menu-item-3510"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/<?php echo urlencode("pendants");?>/"
                      >Pendants</a
                    >
                  </li>
                  <li
                    id="menu-item-1958"
                    class="c-mobile-menu__subitem menu-item-1958"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/pendants/<?php echo urlencode("god");?>/"
                      >God Pendants</a
                    >
                  </li>
                  <li
                    id="menu-item-1963"
                    class="c-mobile-menu__subitem menu-item-1963"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/pendants/<?php echo urlencode("set");?>/"
                      >Pendant Set</a
                    >
                  </li>
                  
                </ul>
              </li>
              <li
                id="menu-item-3494"
                class="c-mobile-menu__subitem c-mobile-menu__subitem--has-children menu-item-3494"
              >
                <span class="a">Chains</span>
                <ul
                  class="c-mobile-menu__submenu c-mobile-menu__submenu--inner"
                >
                  <li
                    id="menu-item-3495"
                    class="c-mobile-menu__subitem menu-item-3495"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/<?php echo urlencode("chains");?>/?g=m"
                      >Chains "Gents"</a
                    >
                  </li>
                  <li
                    id="menu-item-3496"
                    class="c-mobile-menu__subitem menu-item-3496"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/<?php echo urlencode("chains");?>/?g=l"
                      >Chains "Ladies"</a
                    >
                  </li>
                </ul>
              </li>
              <li
                id="menu-item-1951"
                class="c-mobile-menu__subitem c-mobile-menu__subitem--has-children menu-item-1951"
              >
                <span class="a">Earrings</span>
                <ul
                  class="c-mobile-menu__submenu c-mobile-menu__submenu--inner"
                >
                  <li
                    id="menu-item-1953"
                    class="c-mobile-menu__subitem menu-item-1953"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/earrings/studs/>"
                      >Studs</a
                    >
                  </li>
                  <li
                    id="menu-item-1954"
                    class="c-mobile-menu__subitem menu-item-1954"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/earrings/bali/"
                      >Bali</a
                    >
                  </li>
                  <li
                    id="menu-item-1956"
                    class="c-mobile-menu__subitem menu-item-1956"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/earrings/jhala/"
                      >Jhala</a
                    >
                  </li>
                  <li
                    id="menu-item-1955"
                    class="c-mobile-menu__subitem menu-item-1955"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/earrings/jhumki/"
                      >Jhumki</a
                    >
                  </li>
                  
                </ul>
              </li>
              <li
                id="menu-item-2040"
                class="c-mobile-menu__subitem c-mobile-menu__subitem--has-children menu-item-2040"
              >
                <span class="a">Bangles & Kada</span>
                <ul
                  class="c-mobile-menu__submenu c-mobile-menu__submenu--inner"
                >
                  <li
                    id="menu-item-2041"
                    class="c-mobile-menu__subitem menu-item-2041"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/kada/?g=m"
                      >Kada "Gents"</a
                    >
                  </li>
                  <li
                    id="menu-item-2042"
                    class="c-mobile-menu__subitem menu-item-2042"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/kada/?g=l"
                      >Kada "Ladies"</a
                    >
                  </li>
                  <li
                    id="menu-item-2043"
                    class="c-mobile-menu__subitem menu-item-2043"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/kada/?g=baby"
                      >kada "Baby" </a
                    >
                  </li>
                </ul>
              </li>
              <li
                id="menu-item-1952"
                class="c-mobile-menu__subitem c-mobile-menu__subitem--has-children menu-item-1952"
              >
                <span class="a">Watches</span>
                <ul
                  class="c-mobile-menu__submenu c-mobile-menu__submenu--inner"
                >
                  <li
                    id="menu-item-2057"
                    class="c-mobile-menu__subitem menu-item-2057"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/watches/?g=m"
                      >Watch "Gents"</a
                    >
                  </li>
                  <li
                    id="menu-item-2056"
                    class="c-mobile-menu__subitem menu-item-2056"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/watches/?g=l"
                      >Watch "Ladies"</a
                    >
                  </li>
                  
                </ul>
              </li>
              <li
                id="menu-item-2044"
                class="c-mobile-menu__subitem c-mobile-menu__subitem--has-children menu-item-2044"
              >
                <span class="a">Bracelet</span>
                <ul
                  class="c-mobile-menu__submenu c-mobile-menu__submenu--inner"
                >
                  <li
                    id="menu-item-1986"
                    class="c-mobile-menu__subitem menu-item-1986"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/bracelet/?g=m"
                      >Bracelet "Gents"</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/bracelet/?g=l"
                      >Bracelet "Ladies"</a
                    >
                  </li>
                  
                </ul>
              </li>
              <li
                id="menu-item-2044"
                class="c-mobile-menu__subitem c-mobile-menu__subitem--has-children menu-item-2044"
              >
                <span class="a">Anklet</span>
                <ul
                  class="c-mobile-menu__submenu c-mobile-menu__submenu--inner"
                >
                  <li
                    id="menu-item-1986"
                    class="c-mobile-menu__subitem menu-item-1986"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/anklet/"
                      >Anklet</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/anklet/?g=baby"
                      >Baby Anklet</a
                    >
                  </li>
                  
                </ul>
              </li>
              <li
                id="menu-item-2044"
                class="c-mobile-menu__subitem c-mobile-menu__subitem--has-children menu-item-2044"
              >
                <span class="a">Rings</span>
                <ul
                  class="c-mobile-menu__submenu c-mobile-menu__submenu--inner"
                >
                  <li
                    id="menu-item-1986"
                    class="c-mobile-menu__subitem menu-item-1986"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/rings/?g=m"
                      >Ring "Gents"</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/?g=l"
                      >Ring "Ladies"</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/rings/?g=couple"
                      >Ring "Couple"</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/rings/toe/"
                      ></a
                    >Toe Ring
                  </li>
                </ul>
              </li>
              <li
                id="menu-item-2044"
                class="c-mobile-menu__subitem c-mobile-menu__subitem--has-children menu-item-2044"
              >
                <span class="a">Coins & Murti</span>
                <ul
                  class="c-mobile-menu__submenu c-mobile-menu__submenu--inner"
                >
                  <li
                    id="menu-item-1986"
                    class="c-mobile-menu__subitem menu-item-1986"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/coins/?type=gold"
                      >"Gold" Coin</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/coins/?type=silver"
                      >"Silver" Coin</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/<?php echo urlencode("murti emerald");?>/"
                      >Murti Emerald</a
                    >
                  </li>
                  
                </ul>
              </li>
              <li
                id="menu-item-2044"
                class="c-mobile-menu__subitem c-mobile-menu__subitem--has-children menu-item-2044"
              >
                <span class="a">Utensils</span>
                <ul
                  class="c-mobile-menu__submenu c-mobile-menu__submenu--inner"
                >
                  <li
                    id="menu-item-1986"
                    class="c-mobile-menu__subitem menu-item-1986"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/utensils/bowl/"
                      >Bowl</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/utensils/glass/"
                      >Glass</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/utensils/plate/"
                      >Plate</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/utensils/spoon/"
                      ></a
                    >Spoon
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/utensils/set/"
                      ></a
                    >Utensil Set
                  </li>
                </ul>
              </li>
              <li
                id="menu-item-2044"
                class="c-mobile-menu__subitem c-mobile-menu__subitem--has-children menu-item-2044"
              >
                <span class="a">Coughling</span>
                <ul
                  class="c-mobile-menu__submenu c-mobile-menu__submenu--inner"
                >
                  <li
                    id="menu-item-1986"
                    class="c-mobile-menu__subitem menu-item-1986"
                  >
                    <a
                      href="<?php echo $domain; ?>shop/products/coughling/"
                      >Coughling</a
                    >
                  </li>
                  
                  
                </ul>
              </li>
            </ul>

          </li>

          <li
            id="menu-item-210"
            class="c-mobile-menu__item  menu-item-210"
          >
            <span class="a">Engagement</span>
            
          </li>
          <li
            id="menu-item-2318"
            class="c-mobile-menu__item menu-item-2318 "
          >
            <span class="a">Offers</span>
            
          </li>
          <li
            id="menu-item-223"
            class="c-mobile-menu__item menu-item-223"
          >
            <a href="<?php echo $domain;?>help/contact/"
              >Contacts</a
            >
          </li>
        </ul>
      </nav>
      <div class="c-header__mobile_blocks">
        <div class="c-header__top js-mobile-blocks">
          <div class="c-header__top-row-list">
            <div
              class="c-header__top-row-item c-header__top-row-item--phone"
            >
              <i
                class="fa fa-phone c-header__top-row-icon c-header__top-row-icon--phone"
              ></i>
              <a href="<?php echo $domain; ?>tel:<?php echo $phone;?>"
                ><?php echo $phone;?></a
              >
            </div>
            <div
              class="c-header__top-row-item c-header__top-row-item--email"
            >
              <i
                class="fa fa-envelope-o c-header__top-row-icon c-header__top-row-icon--email"
              ></i>
              <a
                href="<?php echo $domain; ?>mailto:<?php echo $email;?>"
                ><?php echo $email;?></a
              >
            </div>
            <div
              class="c-header__top-row-item c-header__top-row-item--address"
            >
              <i
                class="fa fa-map-marker c-header__top-row-icon c-header__top-row-icon--address"
              ></i>
              <?php echo $address;?>
            </div>
            <div
              class="c-header__top-row-item c-header__top-row-item--hours"
            >
              <i
                class="fa fa-clock-o c-header__top-row-icon c-header__top-row-icon--hours"
              ></i>
              <?php echo $timing;?>

            </div>
           
           
            <div
              class="c-header__top-row-item c-header__top-row-item--social"
            >
              <div class="c-soc">
                <a
                  href="<?php echo $facebook_url; ?>"
                  class="c-soc__link"
                  target="_blank"
                  aria-label="Facebook"
                  ><i
                    class="fa fa-facebook c-soc__icon c-soc__icon--facebook"
                  ></i
                ></a>
                <a
                  href="<?php echo $instagram_url; ?>"
                  class="c-soc__link"
                  target="_blank"
                  aria-label="Instagram"
                  ><i
                    class="fa fa-instagram c-soc__icon c-soc__icon--instagram"
                  ></i
                ></a>
                <a
                  href="<?php echo $twitter_url; ?>"
                  class="c-soc__link"
                  target="_blank"
                  aria-label="Twitter"
                  ><i
                    class="fa fa-twitter c-soc__icon c-soc__icon--twitter"
                  ></i
                ></a>
                <a
                  href="<?php echo $youtube_url; ?>"
                  class="c-soc__link"
                  target="_blank"
                  aria-label="YouTube"
                  ><i
                    class="fa fa-youtube-play c-soc__icon c-soc__icon--youtube"
                  ></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="c-header__menu-bottom c-header__menu-bottom--4">
      <button
        class="h-cb c-header__button-link c-header__search-button js-search-button"
        type="button"
        aria-label="Search"
      >
        <i class="fa fa-search h-hide-mobile"></i
        ><i class="fa fa-search h-hide-desktop"></i>
      </button>
      <a
        class="c-header__button-link c-header__button-link--account"
        title="Login"
        href="<?php echo $domain;?>account/"
        rel="nofollow"
        aria-label="My Account"
        ><i class="fa fa-user-o h-hide-mobile"></i
        ><i class="fa fa-user-o h-hide-desktop"></i
      ></a>
      <div class="c-header__wishlist">
        <a
          class="c-header__button-link"
          aria-label="Wishlist"
          href="<?php echo $domain;?>shop/wishlist/"
          ><i
            class="fa fa-heart-o c-header__wishlist-icon h-hide-mobile"
          ></i
          ><i
            class="fa fa-heart-o c-header__wishlist-icon h-hide-desktop"
          ></i
          ><span class="js-wishlist-info"></span
        ></a>
      </div>
      <div class="c-header__cart c-header__cart--default js-cart">
        <a
          class="c-header__button-link js-cart-sidebar-open"
          href="<?php echo $domain;?>shop/cart/"
          aria-label="Shopping cart"
        >
          <i class="fa fa-shopping-cart c-header__cart-icon h-hide-mobile"></i
          ><i class="fa fa-shopping-cart c-header__cart-icon h-hide-desktop"></i
          ><span class="js-cart-info"></span>
        </a>
      </div>
    </div>
  </div>
  <div
    class="c-header__outer c-header__outer--desktop c-header__outer--tr c-header__outer--header-type-1"
  >
    <div
      class="c-header c-header--desktop c-header--tr js-header-desktop c-header--header-type-1 c-header--rows"
    >
      <div class="c-header__row-top">
        <div class="c-header__cell c-header__cell--top-left">
          <div
            class="c-header__top-row-item c-header__top-row-item--address"
          >
            <i
              class="fa fa-map-marker c-header__top-row-icon c-header__top-row-icon--address"
            ></i>
            <?php echo $address;?>

          </div>
        </div>
        <div class="c-header__cell c-header__cell--top-center">
          <div
            class="c-header__logo c-header__logo--desktop c-header__logo--sticky"
          >
            <a
              href="<?php echo $domain;?>"
              class="c-header__logo-link"
            >
              <img
                loading="lazy"
                width="140"
                height="14"
                src="<?php echo $domain; ?>asset/images/logos/goldlogo.png"
                alt="Goldish"
                class="c-header__logo-img c-header__logo-img--desktop c-header__logo-img--svg"
              />
              <img
                width="140"
                height="14"
                src="<?php echo $domain; ?>asset/images/logos/whitelogo.png"
                alt="Goldish"
                class="c-header__logo-img c-header__logo-img--sticky c-header__logo-img--svg"
              />
            </a>
          </div>
        </div>
        <div class="c-header__cell c-header__cell--top-right">
          <div class="c-header__buttons c-header__buttons--header-type-1">
            <button
              class="h-cb c-header__button-link c-header__search-button js-search-button"
              type="button"
              aria-label="Search"
            >
              <i class="fa fa-search h-hide-mobile"></i
              ><i class="fa fa-searchs h-hide-desktop"></i>
            </button>
            <a
              class="c-header__button-link c-header__button-link--account"
              title="Login"
              href="<?php echo $domain;?>account/"
              rel="nofollow"
              aria-label="My Account"
              ><i class="fa fa-user-o h-hide-mobile"></i
              ><i class="fa fa-user-o h-hide-desktop"></i
            ></a>
            <div class="c-header__wishlist">
              <a
                class="c-header__button-link"
                aria-label="Wishlist"
                href="<?php echo $domain;?>shop/wishlist/"
                ><i
                  class="fa fa-heart-o c-header__wishlist-icon h-hide-mobile"
                ></i
                ><i
                  class="fa fa-heart-o c-header__wishlist-icon h-hide-desktop"
                ></i
                ><span class="js-wishlist-info"></span
              ></a>
            </div>
            <div class="c-header__cart c-header__cart--default js-cart">
              <a
                class="c-header__button-link"
                href="<?php echo $domain;?>shop/cart/"
                aria-label="Shopping cart"
              >
                <i class="fa fa-shopping-cart c-header__cart-icon h-hide-mobile"></i
                ><i
                  class="fa fa-shopping-cart c-header__cart-icon h-hide-desktop"
                ></i
                ><span class="js-cart-info"></span>
              </a>
              <div class="widget_shopping_cart_content"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="c-header__row-bottom">
        <div class="c-header__cell c-header__cell--bottom-left">
          <div
            class="c-header__top-row-item c-header__top-row-item--phone"
          >
            <i
              class="fa fa-phone c-header__top-row-icon c-header__top-row-icon--phone"
            ></i>
            <a href="<?php echo $domain; ?>tel:<?php echo $phone;?>"
              >              <?php echo $phone;?>
              </a
            >
          </div>
        </div>
        <div class="c-header__cell c-header__cell--bottom-center"> 
          <nav
            itemscope
            itemtype="http://schema.org/SiteNavigationElement"
            class="c-top-menu js-top-menu"
          >
            <ul
              id="top-menu-desktop"
              class="c-top-menu__list c-top-menu__list--popup-fullwidth"
            >
              <li
                class="c-top-menu__item menu-item-207 js-menu-item"
              >
                <a href="<?php echo $domain; ?>">Home</a>
                
              </li>
              <li
                class="c-top-menu__item c-top-menu__item--has-children menu-item-208 js-menu-item"
              >
                <a href="#"
                  >Explore</a
                >
                <ul
                  class="c-top-menu__submenu c-top-menu__submenu--columns-4 c-top-menu__submenu--expand">
                  <li
                    class="c-top-menu__subitem menu-item-1949 c-top-menu__subitem--expand js-menu-item"
                  >
                    <span class="a">Necklaces</span>
                    <ul
                      class="c-top-menu__submenu c-top-menu__submenu--columns-1 c-top-menu__submenu--expand c-top-menu__submenu--inner"
                    >
                      <li
                        class="c-top-menu__subitem menu-item-2038 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/necklace"
                          >Necklace</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1994 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/necklace/<?php echo urlencode("Long Haar") ?>"
                          >Long Haar</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1993 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/necklace/choker/"
                          >Choker</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1993 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/necklace/mangalsutra/"
                          >Mangalsutra</a
                        >
                      </li>
                      
                    </ul>
                    <span class="a">Pendants</span>
                    <ul
                      class="c-top-menu__submenu c-top-menu__submenu--columns-1 c-top-menu__submenu--expand c-top-menu__submenu--inner"
                    >
                      <li
                        class="c-top-menu__subitem menu-item-2038 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/pendants/"
                          >Pendants</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1994 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/pendants/god/"
                          >God Pendant</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1993 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/pendants/set/"
                          >Pendant Set</a
                        >
                      </li>
                      
                    </ul>
                    <span class="a">Chains</span>
                    <ul
                      class="c-top-menu__submenu c-top-menu__submenu--columns-1 c-top-menu__submenu--expand c-top-menu__submenu--inner"
                    >
                      <li
                        class="c-top-menu__subitem menu-item-2038 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/chains/?g=m"
                          > Chain "Gents"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1994 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/chains/?g=l"
                          > Chain "Ladies"</a
                        >
                      </li>
                      
                      
                    </ul>
                  </li>
                  <li
                    class="c-top-menu__subitem menu-item-1950 c-top-menu__subitem--expand js-menu-item"
                  >
                    <span class="a">Earrings</span>
                    <ul
                      class="c-top-menu__submenu c-top-menu__submenu--columns-1 c-top-menu__submenu--expand c-top-menu__submenu--inner"
                    >
                      <li
                        class="c-top-menu__subitem menu-item-3510 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/earrings/studs/"
                          >Studs</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1958 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/earrings/bali/"
                          >Bali</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1963 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/earrings/jhala/"
                          >Jhala</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1967 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/earrings/jhumki/"
                          >Jhumki</a
                        >
                      </li>
                     
                    </ul>
                    <span class="a">Bangles & Kada</span>
                    <ul
                      class="c-top-menu__submenu c-top-menu__submenu--columns-1 c-top-menu__submenu--expand c-top-menu__submenu--inner"
                    >
                      <li
                        class="c-top-menu__subitem menu-item-3510 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/kada/?g=m"
                          >Kada "Gents"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-3510 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/kada/g=l"
                          >Kada "Ladies"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1958 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/kada/?g=baby"
                          >Baby Kada</a
                        >
                      </li>
                      
                     
                    </ul>
                  </li>
                  <li
                    class="c-top-menu__subitem menu-item-3494 c-top-menu__subitem--expand js-menu-item"
                  >
                  <span class="a">Watches</span>
                    <ul
                      class="c-top-menu__submenu c-top-menu__submenu--columns-1 c-top-menu__submenu--expand c-top-menu__submenu--inner"
                    >
                      <li
                        class="c-top-menu__subitem menu-item-1986 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/watches/?g=m"
                          >Watch "Gents"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1988 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/watches/?g=l;"
                          >Watch "Ladies"</a
                        >
                      </li>
                      
                    </ul>
                    
                  </li>
                  <li
                    class="c-top-menu__subitem menu-item-1951 c-top-menu__subitem--expand js-menu-item"
                  >
                  <span class="a">Bracelet</span>
                    <ul
                      class="c-top-menu__submenu c-top-menu__submenu--columns-1 c-top-menu__submenu--expand c-top-menu__submenu--inner"
                    >
                      <li
                        class="c-top-menu__subitem menu-item-1953 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/bracelet/?g=m"
                          >Bracelet "Gents"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1954 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/bracelet/?g=l"
                          >Bracelet "Ladies"</a
                        >
                      </li>
                      
                    </ul>
                    <span class="a">Anklet</span>
                    <ul
                      class="c-top-menu__submenu c-top-menu__submenu--columns-1 c-top-menu__submenu--expand c-top-menu__submenu--inner"
                    >
                      <li
                        class="c-top-menu__subitem menu-item-1953 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/anklet/"
                          >Anklet</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1954 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/ankle?g=baby/"
                          >Baby Anklet</a
                        >
                      </li>
                      
                    </ul>
                    
                  </li>
                  <li
                    class="c-top-menu__subitem menu-item-2040 c-top-menu__subitem--expand js-menu-item"
                  >
                    <span class="a">Rings</span>
                    <ul
                      class="c-top-menu__submenu c-top-menu__submenu--columns-1 c-top-menu__submenu--expand c-top-menu__submenu--inner"
                    >
                      <li
                        class="c-top-menu__subitem menu-item-2041 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/rings/?g=m"
                          >Ring "Gents"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-2042 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/rings/?g=l"
                          >Ring "Ladies"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-2043 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/rings/?g=couple"
                          >Ring "Couple"</a
                        >
                      </li>
                    </ul>
                    <span class="a">Toe Rings</span>
                    <ul
                      class="c-top-menu__submenu c-top-menu__submenu--columns-1 c-top-menu__submenu--expand c-top-menu__submenu--inner"
                    >
                      <li
                        class="c-top-menu__subitem menu-item-2041 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/rings/toe/"
                          >Toe Ring </a
                        >
                      </li>
                      
                    </ul>
                  </li>
                  <li
                    class="c-top-menu__subitem menu-item-1952 c-top-menu__subitem--expand js-menu-item"
                  >
                  <span class="a">Coins & Murti</span>
                    <ul
                      class="c-top-menu__submenu c-top-menu__submenu--columns-1 c-top-menu__submenu--expand c-top-menu__submenu--inner"
                    >
                      <li
                        class="c-top-menu__subitem menu-item-3495 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/coins/?type=gold"
                          >"Gold" Coin </a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-3496 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/coins/?type=silver"
                          >"Silver" Coin </a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-3496 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/<?php echo urlencode("murti emerald");?>/"
                          >Murti Emerald </a
                        >
                      </li>
                    </ul>
                    <span class="a">Utensils</span>
                    <ul
                      class="c-top-menu__submenu c-top-menu__submenu--columns-1 c-top-menu__submenu--expand c-top-menu__submenu--inner"
                    >
                      <li
                        class="c-top-menu__subitem menu-item-2057 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/utensils/bowl/"
                          >Bowl</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-2056 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/utensils/glass/"
                          >Glass</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-2058 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/utensils/plate/"
                          >Plate</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-2059 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/utensils/spoon/"
                          >Spoon</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-2059 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/utensils/set/"
                          >Utensil "Set"</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                    class="c-top-menu__subitem menu-item-2044 c-top-menu__subitem--expand js-menu-item"
                  >
                    
                    <span class="a">Coughling</span>
                    <ul
                      class="c-top-menu__submenu c-top-menu__submenu--columns-1 c-top-menu__submenu--expand c-top-menu__submenu--inner"
                    >
                      <li
                        class="c-top-menu__subitem menu-item-1986 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="<?php echo $domain; ?>shop/products/coughling/"
                          >Coughling</a
                        >
                      </li>
                      
                    </ul>
                  </li>
                </ul>
              </li>
              <li
                class="c-top-menu__item menu-item-209 js-menu-item"
              >
                <a href="#"
                  >Shop</a
                >
                
              </li>
              <li
                class="c-top-menu__item  menu-item-210 js-menu-item"
              >
                <span class="a">Engagement</span>
                
              </li>
              <li
                class="c-top-menu__item menu-item-2318  js-menu-item"
              >
                <span class="a">Offers</span>
                
              </li>
              <li class="c-top-menu__item menu-item-223 js-menu-item">
                <a href="<?php echo $domain; ?>help/contact/"
                  >Contacts</a
                >
              </li>
            </ul>
          </nav>
        </div>
        <div class="c-header__cell c-header__cell--bottom-right">
          <div
            class="c-header__top-row-item c-header__top-row-item--other"
          >
            <?php echo $special_line;?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
    class="c-header--desktop l-section__container js-simple-container"
  ></div>
</header>

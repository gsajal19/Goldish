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
            href="https://parkofideas.com/goldish/demo/"
            class="c-header__logo-link"
          >
            <img
              width="140"
              height="14"
              src="asset/images/logos/goldlogo.png"
              alt="Goldish"
              class="c-header__logo-img c-header__logo-img--mobile c-header__logo-img--svg"
            />
            <img
              width="140"
              height="14"
              src="asset/images/logos/whitelogo.png"
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
              href="<?php echo $domain;?>/shop/cart/"
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
      <?php
// Get the current URL
$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Check if the current URL is the home page
if ($current_url == "http://$_SERVER[HTTP_HOST]/") {
    // If it's the home page, set the link to #
    $home_url = "#";
} else {
    // If it's not the home page, set the link to the root URL
    $home_url = "http://$_SERVER[HTTP_HOST]/";
}
?>
        <ul id="mobile-top-menu" class="c-mobile-menu__list">
          <li
            id="menu-item-207"
            class="c-mobile-menu__item menu-item-207 "
          >
            <a href="<?php echo $home_url; ?>">Home</a>
            
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
                      href="https://parkofideas.com/goldish/demo/shop/?set=4,6,37"
                      >Necklace</a
                    >
                  </li>
                  <li
                    id="menu-item-1994"
                    class="c-mobile-menu__subitem menu-item-1994"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=2,40"
                      >Long Haar</a
                    >
                  </li>
                  <li
                    id="menu-item-1993"
                    class="c-mobile-menu__subitem menu-item-1993"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=3,38,39"
                      >Choker</a
                    >
                  </li>
                  <li
                    id="menu-item-1992"
                    class="c-mobile-menu__subitem menu-item-1992"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=4"
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
                      href="https://parkofideas.com/goldish/demo/shop/t1-circle-pendant/?set=14"
                      >Pendants</a
                    >
                  </li>
                  <li
                    id="menu-item-1958"
                    class="c-mobile-menu__subitem menu-item-1958"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/t1-circle-pendant/?set=13"
                      >God Pendants</a
                    >
                  </li>
                  <li
                    id="menu-item-1963"
                    class="c-mobile-menu__subitem menu-item-1963"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/color-by-the-yard-emerald-pendant/?set=15"
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
                      href="https://parkofideas.com/goldish/demo/shop/?set=43"
                      >Chains "Gents"</a
                    >
                  </li>
                  <li
                    id="menu-item-3496"
                    class="c-mobile-menu__subitem menu-item-3496"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=44"
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
                      href="https://parkofideas.com/goldish/demo/shop/t1-circle-pendant/"
                      >Studs</a
                    >
                  </li>
                  <li
                    id="menu-item-1954"
                    class="c-mobile-menu__subitem menu-item-1954"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/color-by-the-yard-emerald-pendant/"
                      >Bali</a
                    >
                  </li>
                  <li
                    id="menu-item-1956"
                    class="c-mobile-menu__subitem menu-item-1956"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/necklace-stacking-set/"
                      >Jhala</a
                    >
                  </li>
                  <li
                    id="menu-item-1955"
                    class="c-mobile-menu__subitem menu-item-1955"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/starfish-brooch/"
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
                      href="https://parkofideas.com/goldish/demo/shop/?set=10"
                      >Kada "Gents"</a
                    >
                  </li>
                  <li
                    id="menu-item-2042"
                    class="c-mobile-menu__subitem menu-item-2042"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=11"
                      >Kada "Ladies"</a
                    >
                  </li>
                  <li
                    id="menu-item-2043"
                    class="c-mobile-menu__subitem menu-item-2043"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=12"
                      >Baby kada</a
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
                      href="https://parkofideas.com/goldish/demo/brands-1/"
                      >Watch "Gents"</a
                    >
                  </li>
                  <li
                    id="menu-item-2056"
                    class="c-mobile-menu__subitem menu-item-2056"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/brands-2/"
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
                      href="https://parkofideas.com/goldish/demo/shop/?set=31"
                      >Bracelet "Gents"</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=30"
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
                      href="https://parkofideas.com/goldish/demo/shop/?set=31"
                      >Anklet</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=30"
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
                      href="https://parkofideas.com/goldish/demo/shop/?set=31"
                      >Ring "Gents"</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=30"
                      >Ring "Ladies"</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=30"
                      >Ring "Couple"</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=30"
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
                      href="https://parkofideas.com/goldish/demo/shop/?set=31"
                      >"Gold" Coin</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=30"
                      >"Silver" Coin</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=30"
                      >Murti Emerald</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=30"
                      ></a
                    >Toe Ring
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
                      href="https://parkofideas.com/goldish/demo/shop/?set=31"
                      >Bowl</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=30"
                      >Glass</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=30"
                      >Plate</a
                    >
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=30"
                      ></a
                    >Spoon
                  </li>
                  <li
                    id="menu-item-1988"
                    class="c-mobile-menu__subitem menu-item-1988"
                  >
                    <a
                      href="https://parkofideas.com/goldish/demo/shop/?set=30"
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
                      href="https://parkofideas.com/goldish/demo/shop/?set=31"
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
            <a href="https://parkofideas.com/goldish/demo/contacts/"
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
              <a href="https://parkofideas.com/tel:7123399294"
                >712-339-9294</a
              >
            </div>
            <div
              class="c-header__top-row-item c-header__top-row-item--email"
            >
              <i
                class="fa fa-envelope-o c-header__top-row-icon c-header__top-row-icon--email"
              ></i>
              <a
                href="https://parkofideas.com/mailto:info@goldish-jew.com"
                >gsajal.official@gmail.com</a
              >
            </div>
            <div
              class="c-header__top-row-item c-header__top-row-item--address"
            >
              <i
                class="fa fa-map-marker c-header__top-row-icon c-header__top-row-icon--address"
              ></i>
              283 N. Glenwood Street, Levittown, NY
            </div>
            <div
              class="c-header__top-row-item c-header__top-row-item--hours"
            >
              <i
                class="fa fa-clock-o c-header__top-row-icon c-header__top-row-icon--hours"
              ></i>
              Mon-Fri: 10:00 - 18:00
            </div>
            <div
              class="c-header__top-row-item c-header__top-row-item--lang"
            >
              <div class="c-lang-demo">
                <a
                  href="https://parkofideas.com/#"
                  class="c-lang-demo__link"
                  onclick="return false;"
                  >English</a
                >
                <ul class="c-lang-demo__list">
                  <li class="c-lang-demo__item">
                    <a
                      class="c-lang-demo__sublink"
                      href="https://parkofideas.com/#"
                      onclick="return false;"
                      >English</a
                    >
                  </li>
                  <li class="c-lang-demo__item">
                    <a
                      class="c-lang-demo__sublink"
                      href="https://parkofideas.com/#"
                      onclick="return false;"
                      >German</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div
              class="c-header__top-row-item c-header__top-row-item--other"
            >
              Best special offers every week! 40% Off!
            </div>
            <div
              class="c-header__top-row-item c-header__top-row-item--social"
            >
              <div class="c-soc">
                <a
                  href="https://parkofideas.com/#"
                  class="c-soc__link"
                  target="_blank"
                  aria-label="Facebook"
                  ><i
                    class="fa fa-facebook c-soc__icon c-soc__icon--facebook"
                  ></i
                ></a>
                <a
                  href="https://parkofideas.com/#"
                  class="c-soc__link"
                  target="_blank"
                  aria-label="Instagram"
                  ><i
                    class="fa fa-instagram c-soc__icon c-soc__icon--instagram"
                  ></i
                ></a>
                <a
                  href="https://parkofideas.com/#"
                  class="c-soc__link"
                  target="_blank"
                  aria-label="Twitter"
                  ><i
                    class="fa fa-twitter c-soc__icon c-soc__icon--twitter"
                  ></i
                ></a>
                <a
                  href="https://parkofideas.com/#"
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
        href="https://parkofideas.com/goldish/demo/my-account/"
        rel="nofollow"
        aria-label="My Account"
        ><i class="fa fa-user-o h-hide-mobile"></i
        ><i class="fa fa-user-o h-hide-desktop"></i
      ></a>
      <div class="c-header__wishlist">
        <a
          class="c-header__button-link"
          aria-label="Wishlist"
          href="https://parkofideas.com/goldish/demo/wishlist/"
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
          href="<?php echo $domain;?>/shop/cart/"
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
            283 N. Glenwood Street, Levittown, NY
          </div>
        </div>
        <div class="c-header__cell c-header__cell--top-center">
          <div
            class="c-header__logo c-header__logo--desktop c-header__logo--sticky"
          >
            <a
              href="https://parkofideas.com/goldish/demo/"
              class="c-header__logo-link"
            >
              <img
                loading="lazy"
                width="140"
                height="14"
                src="asset/images/logos/goldlogo.png"
                alt="Goldish"
                class="c-header__logo-img c-header__logo-img--desktop c-header__logo-img--svg"
              />
              <img
                width="140"
                height="14"
                src="asset/images/logos/whitelogo.png"
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
              href="https://parkofideas.com/goldish/demo/my-account/"
              rel="nofollow"
              aria-label="My Account"
              ><i class="fa fa-user-o h-hide-mobile"></i
              ><i class="fa fa-user-o h-hide-desktop"></i
            ></a>
            <div class="c-header__wishlist">
              <a
                class="c-header__button-link"
                aria-label="Wishlist"
                href="https://parkofideas.com/goldish/demo/wishlist/"
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
                href="<?php echo $domain;?>/shop/cart/"
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
            <a href="https://parkofideas.com/tel:7123399294"
              >712-339-9294</a
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
                <a href="<?php echo $home_url; ?>">Home</a>
                
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
                          href="https://parkofideas.com/goldish/demo/shop/?set=4,6,37"
                          >Necklace</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1994 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/?set=2,40"
                          >Long Haar</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1993 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/?set=3,38,39"
                          >Choker</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1993 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/?set=3,38,39"
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
                          href="https://parkofideas.com/goldish/demo/shop/?set=4,6,37"
                          >Pendant</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1994 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/?set=2,40"
                          >God Pendant</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1993 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/?set=3,38,39"
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
                          href="https://parkofideas.com/goldish/demo/shop/?set=4,6,37"
                          > Chain "Gents"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1994 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/?set=2,40"
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
                          href="https://parkofideas.com/goldish/demo/shop/t1-circle-pendant/?set=14"
                          >Studs</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1958 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/t1-circle-pendant/?set=13"
                          >Bali</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1963 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/color-by-the-yard-emerald-pendant/?set=15"
                          >Jhala</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1967 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/diamond-vine-climber-earrings/?set=34,13"
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
                          href="https://parkofideas.com/goldish/demo/shop/t1-circle-pendant/?set=14"
                          >Kada "Gents"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-3510 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/t1-circle-pendant/?set=14"
                          >Kada "Ladies"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1958 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/t1-circle-pendant/?set=13"
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
                          href="https://parkofideas.com/goldish/demo/shop/?set=31"
                          >Watch "Gents"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1988 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/?set=30"
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
                          href="https://parkofideas.com/goldish/demo/shop/t1-circle-pendant/"
                          >Bracelet "Gents"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1954 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/color-by-the-yard-emerald-pendant/"
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
                          href="https://parkofideas.com/goldish/demo/shop/t1-circle-pendant/"
                          >Anklet</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-1954 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/color-by-the-yard-emerald-pendant/"
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
                          href="https://parkofideas.com/goldish/demo/shop/?set=10"
                          >Ring "Gents"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-2042 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/?set=11"
                          >Ring "Ladies"</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-2043 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/?set=12"
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
                          href="https://parkofideas.com/goldish/demo/shop/?set=10"
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
                          href="https://parkofideas.com/goldish/demo/shop/?set=43"
                          >"Gold" Coin </a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-3496 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/?set=44"
                          >"Silver" Coin </a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-3496 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/?set=44"
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
                          href="https://parkofideas.com/goldish/demo/brands-1/"
                          >Bowl</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-2056 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/brands-2/"
                          >Glass</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-2058 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/heart-locket/?set=29"
                          >Plate</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-2059 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/?set=29"
                          >Spoon</a
                        >
                      </li>
                      <li
                        class="c-top-menu__subitem menu-item-2059 c-top-menu__subitem--collapse js-menu-item"
                      >
                        <a
                          href="https://parkofideas.com/goldish/demo/shop/?set=29"
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
                          href="https://parkofideas.com/goldish/demo/shop/?set=31"
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
                <a href="https://parkofideas.com/goldish/demo/contacts/"
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
            Best special offers every week! 40% Off!
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
    class="c-header--desktop l-section__container js-simple-container"
  ></div>
</header>

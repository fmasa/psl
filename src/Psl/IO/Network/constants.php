<?php

declare(strict_types=1);

namespace Psl\IO\Network;

/**
 * General behavior for selecting which IP version to use.
 */
const  PREFER_IPV6 = 0;
const  FORCE_IPV6 = 6;
const  FORCE_IPV4 = 4;

/**
 * A specific version of IP.
 */
const IPV6 = FORCE_IPV6;
const IPV4 = FORCE_IPV4;

<?php
declare(strict_types=1);

namespace Interop\Session\Configuration;

interface SessionConfigurationInterface {
  public function getSessionHandler(): ?\SessionHandlerInterface;
  public function getCookieName(): string;
  public function getCookieLifetime(): int;
  public function getCookiePath(): string;
  public function getCookieDomain(): string;
  public function getGcMaxLifeTime(): int;
  public function isCookieOnlySecure(): bool;
  public function getSavePath(): string;
  public function isCookieHttpOnly(): bool;
}

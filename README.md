# Posting Template

[![Tests](https://github.com/phpbbmodders/phpbb-3.1-ext-postingtemplate/actions/workflows/tests.yml/badge.svg)](https://github.com/phpbbmodders/phpbb-3.1-ext-postingtemplate/actions/workflows/tests.yml) [![Lint](https://github.com/phpbbmodders/phpbb-3.1-ext-postingtemplate/actions/workflows/lint.yml/badge.svg)](https://github.com/phpbbmodders/phpbb-3.1-ext-postingtemplate/actions/workflows/lint.yml)

Fills the message box with a per-forum template when someone starts a new topic.

## Features

- A **Posting template** field on each forum's settings in the ACP.
- The text appears in the editor when starting a new topic in that forum; replies are not affected.
- Leave it blank to switch it off for a forum.

## Requirements

- phpBB 3.3.19 or later
- PHP 7.4 or later

## Installation

1. Copy the extension to `/ext/phpbbmodders/postingtemplate`
2. In the Administration Control Panel, go to **Customise → Manage extensions**
3. Enable the **Posting Template** extension
4. Set a template on a forum under **ACP → Forums → Manage forums → Edit**

## Contributing

Contributions are welcome!

- **Bug reports**: [Open an issue](https://github.com/phpbbmodders/phpbb-3.1-ext-postingtemplate/issues).
- **Everything else** (questions, feature requests, ideas, general discussion): [Use Discussions](https://github.com/orgs/phpbbmodders/discussions), or the [community forum](https://www.phpbbmodders.com/community/).
- Pull requests are welcome for bug fixes or discussed features.

## Acknowledgments

- Based on the phpBB 3.0 **Posting Template** MOD by phpbbmodders.net (co-authors Kailey and bonelifer; contributors RMcGirr83, Sniper_E, igorw and tumba25).
- Ported to phpBB 3.1 by Rich McGirr ([RMcGirr83](https://github.com/rmcgirr83)).
- Code review, bug fixes, and documentation assisted by [Claude](https://www.anthropic.com/claude).

## License

This extension is licensed under the **GNU General Public License v2.0**.

See [license.txt](license.txt) for more information.

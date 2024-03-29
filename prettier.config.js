module.exports = {
    printWidth: 150,
    semi: true,
    tabWidth: 4,
    useTabs: false,
    singleQuote: true,
    trailingComma: "none",
    bracketSpacing: true,
    htmlWhitespaceSensitivity: "ignore",
    parsers: {
        ".jsx": "flow",
        ".scss": "scss",
        ".ts": "typescript",
        ".less": "css",
        ".vue": "vue",
        ".nvue": "vue",
        ".ux": "vue",
        ".yml": "yaml",
    }
}
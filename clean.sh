cd uploads &&
  find . -type f \( ! -iname ".*" \) -printf '%T@ %b :%p\0' |
    sort -zrn |
    gawk -v RS='\0' -v ORS='\0' '
      BEGIN {max = 10e9/2}
      {du += 512 * $2}
      du > max {
        sub("[^:]*:", ""); print
      }' | xargs -r0 rm -f


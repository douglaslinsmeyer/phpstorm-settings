/**
#if (${GET_ORIS} == "is")
 * Check 
#else

#end
 * Gets the ${NAME}.
 *
 * @return ${TYPE_HINT}
 */
public ${STATIC} function ${GET_OR_IS}${NAME}()
{
#if (${STATIC} == "static")
    return self::$${FIELD_NAME};
#else
    return $this->${FIELD_NAME};
#end
}

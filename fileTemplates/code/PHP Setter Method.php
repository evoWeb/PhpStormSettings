/**
 * Setter for ${PARAM_NAME}
 *
 * @param ${TYPE_HINT} $${PARAM_NAME}
 *
 * @return void
 */
public ${STATIC} function set${NAME}($${PARAM_NAME})
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
#end
}

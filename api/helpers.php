<?php

function missingField($fieldName, $app) {
	$app->render(412, array("msg" => sprintf("Missing field %s", $fieldName)));
}

function objectNotFound($object, $app) {
	$app->render(412, array("msg" => sprintf("%s not found.", $object)));
}

function valueForKey($key, $app) {
	if ($app->request->isFormData()) {
		return $app->request->params($key);
	} else {
		if (isset($app->request->getBody()[$key])) {
			return $app->request->getBody()[$key];
		}
	}

	return NULL;
}

?>
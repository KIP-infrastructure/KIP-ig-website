# Smerter og kvalme - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Smerter og kvalme**

## CodeSystem: Smerter og kvalme 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SmerteKvalme | *Version*:2.23.0 |
| Active as of 2022-06-14 | *Computable Name*:SmerteKvalmeCS |

 
Smerter og kvalme målt i forskellige situationer 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SmerteKvalme](ValueSet-SmerteKvalme.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SmerteKvalme",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SmerteKvalme",
  "version" : "2.23.0",
  "name" : "SmerteKvalmeCS",
  "title" : "Smerter og kvalme",
  "status" : "active",
  "date" : "2022-06-14T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Smerter og kvalme målt i forskellige situationer",
  "content" : "complete",
  "count" : 4,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
    "code" : "0",
    "display" : "0",
    "definition" : "0"
  },
  {
    "code" : "1",
    "display" : "1",
    "definition" : "1"
  },
  {
    "code" : "2",
    "display" : "2",
    "definition" : "2"
  },
  {
    "code" : "3",
    "display" : "3",
    "definition" : "3"
  }]
}

```

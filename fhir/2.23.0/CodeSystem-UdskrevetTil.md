# Udskrevet til - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Udskrevet til**

## CodeSystem: Udskrevet til 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/UdskrevetTil | *Version*:2.23.0 |
| Active as of 2022-06-13 | *Computable Name*:UdskrevetTilCS |

 
Udskrevet til 

 This Code system is referenced in the content logical definition of the following value sets: 

* [UdskrevetTil](ValueSet-UdskrevetTil.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "UdskrevetTil",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/UdskrevetTil",
  "version" : "2.23.0",
  "name" : "UdskrevetTilCS",
  "title" : "Udskrevet til",
  "status" : "active",
  "date" : "2022-06-13T00:00:00+02:00",
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
  "description" : "Udskrevet til",
  "content" : "complete",
  "count" : 6,
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
    "code" : "stamafd",
    "display" : "Stamafdeling",
    "definition" : "Stamafdeling"
  },
  {
    "code" : "hjemmet",
    "display" : "Hjemmet",
    "definition" : "Hjemmet"
  },
  {
    "code" : "reoper",
    "display" : "Reoperation",
    "definition" : "Reoperation"
  },
  {
    "code" : "intensiv",
    "display" : "Intensiv",
    "definition" : "Intensiv afdeling"
  },
  {
    "code" : "andet_hosp",
    "display" : "Andet hospital",
    "definition" : "Andet hospital"
  },
  {
    "code" : "doed_u_obs",
    "display" : "Død under obs.",
    "definition" : "Død i observationsperioden"
  }]
}

```

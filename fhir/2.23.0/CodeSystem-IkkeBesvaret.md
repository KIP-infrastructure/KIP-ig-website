# Ikke besvaret - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ikke besvaret**

## CodeSystem: Ikke besvaret 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/IkkeBesvaret | *Version*:2.23.0 |
| Active as of 2022-10-19 | *Computable Name*:IkkeBesvaretCS |

 
Årsager til ikke-besvaret spørgsmål 

 This Code system is referenced in the content logical definition of the following value sets: 

* [IkkeBesvaret](ValueSet-IkkeBesvaret.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "IkkeBesvaret",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/IkkeBesvaret",
  "version" : "2.23.0",
  "name" : "IkkeBesvaretCS",
  "title" : "Ikke besvaret",
  "status" : "active",
  "date" : "2022-10-19T00:00:00+02:00",
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
  "description" : "Årsager til ikke-besvaret spørgsmål",
  "content" : "complete",
  "count" : 3,
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
    "code" : "ej_tilg",
    "display" : "Ikke tilgængelig",
    "definition" : "Data ikke tilgængelig"
  },
  {
    "code" : "ej_udt",
    "display" : "Ikke udtømmende",
    "definition" : "Svarmuligheder er ikke udtømmende"
  },
  {
    "code" : "na",
    "display" : "ikke relevant",
    "definition" : "Ikke relevant"
  }]
}

```

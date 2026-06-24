# Frekvens - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Frekvens**

## CodeSystem: Frekvens 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Frekvens | *Version*:2.21.0 |
| Active as of 2024-02-13 | *Computable Name*:Frekvens |

 
Frekvens for hvor ofte en given hændelse optræder 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FrekvensLaekDUGA](ValueSet-FrekvensLaekDUGA.md)
* [FrekvensNedsynkningDUGA](ValueSet-FrekvensNedsynkningDUGA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Frekvens",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Frekvens",
  "version" : "2.21.0",
  "name" : "Frekvens",
  "title" : "Frekvens",
  "status" : "active",
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "Frekvens for hvor ofte en given hændelse optræder",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 10,
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
    "code" : "aldrig",
    "display" : "Aldrig",
    "definition" : "Aldrig / Slet ikke"
  },
  {
    "code" : "konstant",
    "display" : "Konstant",
    "definition" : "Hele tiden"
  },
  {
    "code" : "dgl-lt1",
    "display" : "Mindre end 1 gang om dagen",
    "definition" : "Mindre end 1 gang om dagen"
  },
  {
    "code" : "dgl-1",
    "display" : "1 gang om dagen",
    "definition" : "1 gang om dagen"
  },
  {
    "code" : "dgl-ge1",
    "display" : "1 eller flere gange om dagen",
    "definition" : "1 eller flere gange om dagen"
  },
  {
    "code" : "ugl-le1",
    "display" : "1 gang om ugen eller mindre",
    "definition" : "1 gang om ugen eller mindre"
  },
  {
    "code" : "ugl-ge1",
    "display" : "1 gang om ugen eller mere",
    "definition" : "1 gang om ugen eller mere"
  },
  {
    "code" : "ugl-2-3",
    "display" : "2-3 gange om ugen",
    "definition" : "2-3 gange om ugen"
  },
  {
    "code" : "mdl-lt1",
    "display" : "Mindre end 1 gang om måneden",
    "definition" : "Mindre end 1 gang om måneden"
  },
  {
    "code" : "mdl-1-4",
    "display" : "1-4 gange om måneden",
    "definition" : "1-4 gange om måneden"
  }]
}

```

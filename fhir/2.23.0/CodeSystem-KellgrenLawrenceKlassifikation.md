# Kellgren-Lawrence Klassifikation - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kellgren-Lawrence Klassifikation**

## CodeSystem: Kellgren-Lawrence Klassifikation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/KellgrenLawrenceKlassifikation | *Version*:2.23.0 |
| Active as of 2023-12-19 | *Computable Name*:KellgrenLawrenceKlassifikation |

 
Kellgren-Lawrence Klassifikation 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KellgrenLawsonKlassifikation](ValueSet-KellgrenLawsonKlassifikation.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "KellgrenLawrenceKlassifikation",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/KellgrenLawrenceKlassifikation",
  "version" : "2.23.0",
  "name" : "KellgrenLawrenceKlassifikation",
  "title" : "Kellgren-Lawrence Klassifikation",
  "status" : "active",
  "date" : "2023-12-19T00:00:00+02:00",
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
  "description" : "Kellgren-Lawrence Klassifikation",
  "caseSensitive" : false,
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
    "code" : "tvivlsom",
    "display" : "Tvivlsom (normal ledspalte)",
    "definition" : "Tvivlsom (normal ledspalte)"
  },
  {
    "code" : "mild",
    "display" : "Mild (osteofyt dannelse, normal ledspalte)",
    "definition" : "Mild (osteofyt dannelse, normal ledspalte)"
  },
  {
    "code" : "moderat",
    "display" : "Moderat (reduktion af ledspalte)",
    "definition" : "Moderat (reduktion af ledspalte)"
  },
  {
    "code" : "svaer",
    "display" : "Svær (markant reduktion af ledspalte)",
    "definition" : "Svær (markant reduktion af ledspalte)"
  }]
}

```

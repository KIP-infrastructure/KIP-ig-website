# Radiological bone changes - Indication of changes in bones - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Radiological bone changes - Indication of changes in bones**

## CodeSystem: Radiological bone changes - Indication of changes in bones 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RadiologicalBoneChanges | *Version*:2.21.0 |
| Active as of 2022-06-07 | *Computable Name*:RadiologicalBoneChangesCS |

 
Radiological bone changes - Indication of changes in bones 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RadiologicalBoneChanges](ValueSet-RadiologicalBoneChanges.md)
* [RadiologicalBoneChanges202412](ValueSet-RadiologicalBoneChanges202412.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RadiologicalBoneChanges",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RadiologicalBoneChanges",
  "version" : "2.21.0",
  "name" : "RadiologicalBoneChangesCS",
  "title" : "Radiological bone changes - Indication of changes in bones",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Radiological bone changes - Indication of changes in bones",
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
    "code" : "none",
    "display" : "Ingen knogleforandringer",
    "definition" : "Ingen knogleforandringer"
  },
  {
    "code" : "diffuse_halisteresis",
    "display" : "Diffus halisterese (som eneste forandring)",
    "definition" : "Diffus halisterese (som eneste forandring)"
  },
  {
    "code" : "few",
    "display" : "Enkelte knogleforandr. i én/enkelte region(er)",
    "definition" : "Enkelte knogleforandr. i én/enkelte region(er)"
  },
  {
    "code" : "multiple",
    "display" : "Multiple knogleforandr. i én/flere regioner",
    "definition" : "Multiple knogleforandr. i én/flere regioner"
  }]
}

```

# Scandinavian Stroke Scale (SSS) - Arm lift - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale (SSS) - Arm lift**

## CodeSystem: Scandinavian Stroke Scale (SSS) - Arm lift 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SSSArmLift | *Version*:2.23.1 |
| Active as of 2022-06-23 | *Computable Name*:SSSArmLift |

 
Scandinavian Stroke Scale (SSS) - Arm lift: Vurderes på begge arme, men der noteres kun i forhold til siden for en eventuel lammelse 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SSSArmloeft](ValueSet-SSSArmloeft.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SSSArmLift",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSArmLift",
  "version" : "2.23.1",
  "name" : "SSSArmLift",
  "title" : "Scandinavian Stroke Scale (SSS) - Arm lift",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Scandinavian Stroke Scale (SSS) - Arm lift: Vurderes på begge arme, men der noteres kun i forhold til siden for en eventuel lammelse",
  "content" : "complete",
  "count" : 5,
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
    "code" : "6",
    "display" : "6",
    "definition" : "Løfter arm med normal kraft"
  },
  {
    "code" : "5",
    "display" : "5",
    "definition" : "Løfter strakt arm med nedsat kraft"
  },
  {
    "code" : "4",
    "display" : "4",
    "definition" : "Løfter arm med fleksion af albue"
  },
  {
    "code" : "2",
    "display" : "2",
    "definition" : "Bevæger armen men ikke mod tyngden"
  },
  {
    "code" : "0",
    "display" : "0",
    "definition" : "Paralyse: Ingen bevægelse mulig."
  }]
}

```

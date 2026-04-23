# Anæstesiydelse - KIP Infrastructure v2.19.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesiydelse**

## CodeSystem: Anæstesiydelse 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaService | *Version*:2.19.3 |
| Active as of 2022-06-09 | *Computable Name*:AnasthesiaServiceCS |

 
Anæstesiydelse 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AnaestesiDUGA](ValueSet-AnaestesiDUGA.md)
* [AnaestesiGenerelSpinalEpiduralLokalanalgesi](ValueSet-AnaestesiGenerelSpinalEpiduralLokalanalgesi.md)
* [AnaestesiLokalGenerel](ValueSet-AnaestesiLokalGenerel.md)
* [AnaestesiLokalGenerelSpinalEpidural](ValueSet-AnaestesiLokalGenerelSpinalEpidural.md)
* [AnaestesiRegionalDHR](ValueSet-AnaestesiRegionalDHR.md)
* [AnaestesiRegionalUniverselKombineret](ValueSet-AnaestesiRegionalUniverselKombineret.md)
* [AnasthesiaService](ValueSet-AnasthesiaService.md)
* [AnasthesiaService2026](ValueSet-AnasthesiaService2026.md)
* [AnasthesiaServiceDAD](ValueSet-AnasthesiaServiceDAD.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AnasthesiaService",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaService",
  "version" : "2.19.3",
  "name" : "AnasthesiaServiceCS",
  "title" : "Anæstesiydelse",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "Anæstesiydelse",
  "content" : "complete",
  "count" : 19,
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
    "code" : "gen_anesthesia",
    "display" : "General anesthesia",
    "definition" : "Generel anæstesi / SNOMED-CT: 50697003"
  },
  {
    "code" : "gen_anesthesia_spc",
    "display" : "General anasthesia after insufficient local anasthesia and/or central block",
    "definition" : "Generel anæstesi efter insufficient regional anæstesi og/eller central blokade",
    "property" : [{
      "code" : "comment",
      "valueString" : "Removed"
    },
    {
      "code" : "effectiveDate",
      "valueDateTime" : "2026-03-04T00:00:00+01:00"
    },
    {
      "code" : "status",
      "valueCode" : "retired"
    },
    {
      "code" : "inactive",
      "valueBoolean" : true
    }]
  },
  {
    "code" : "local_anesthesia",
    "display" : "Local anesthesia",
    "definition" : "Lokal anæstesi / SNOMED-CT: 386761002"
  },
  {
    "code" : "local_analgesia",
    "display" : "Local analgesia",
    "definition" : "Lokal analgesi"
  },
  {
    "code" : "administration_epidural",
    "display" : "Administration of drug or medicament via epidural route",
    "definition" : "Administration af lægemiddel vha. epidural"
  },
  {
    "code" : "nerve_block",
    "display" : "Peripheral nerve block",
    "definition" : "Perifer nerveblokade"
  },
  {
    "code" : "central_block",
    "display" : "Central block",
    "definition" : "Central blokade"
  },
  {
    "code" : "sedation",
    "display" : "Sedation",
    "definition" : "Sedation"
  },
  {
    "code" : "surveillance",
    "display" : "Surveillance",
    "definition" : "Overvågning"
  },
  {
    "code" : "regional",
    "display" : "Regional (spinal/epidural)",
    "definition" : "Regional (spinal/epidural) / SNOMED-CT: 231262009",
    "concept" : [{
      "code" : "spinal",
      "display" : "Spinal",
      "definition" : "Spinal"
    },
    {
      "code" : "epidural",
      "display" : "Epidural",
      "definition" : "Epidural",
      "concept" : [{
        "code" : "normotensive",
        "display" : "Normotensive epidural anaesthesia",
        "definition" : "Normotensive epidural anaesthesia"
      },
      {
        "code" : "hypotensive",
        "display" : "Hypotensive epidural anaesthesia",
        "definition" : "Hypotensive epidural anaesthesia"
      },
      {
        "code" : "normo_hypotensive",
        "display" : "Normo- or Hypotensive epidural anaesthesia",
        "definition" : "Normo- eller Hypotensiv epidural anæstesi"
      }]
    }]
  },
  {
    "code" : "universal",
    "display" : "Universal",
    "definition" : "Universal"
  },
  {
    "code" : "combined",
    "display" : "Combined",
    "definition" : "Combined"
  },
  {
    "code" : "uni_combined",
    "display" : "Universal_Combined",
    "definition" : "Universel/Kombineret"
  },
  {
    "code" : "rus",
    "display" : "Rus",
    "definition" : "Rus"
  }]
}

```

# Anæstesiydelse - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesiydelse**

## CodeSystem: Anæstesiydelse 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaService | *Version*:2.16.0 |
| Active as of 2022-06-09 | *Computable Name*:AnasthesiaService |

 
Anæstesiydelse 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AnaestesiDUGA](ValueSet-AnaestesiDUGA.md)
* [AnaestesiGenerelSpinalEpiduralLokalanalgesi](ValueSet-AnaestesiGenerelSpinalEpiduralLokalanalgesi.md)
* [AnaestesiLokalGenerel](ValueSet-AnaestesiLokalGenerel.md)
* [AnaestesiLokalGenerelSpinalEpidural](ValueSet-AnaestesiLokalGenerelSpinalEpidural.md)
* [AnaestesiRegionalDHR](ValueSet-AnaestesiRegionalDHR.md)
* [AnaestesiRegionalUniverselKombineret](ValueSet-AnaestesiRegionalUniverselKombineret.md)
* [AnasthesiaService](ValueSet-AnasthesiaService.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AnasthesiaService",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaService",
  "version" : "2.16.0",
  "name" : "AnasthesiaService",
  "title" : "Anæstesiydelse",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Anæstesiydelse",
  "content" : "complete",
  "count" : 18,
  "concept" : [
    {
      "code" : "gen_anesthesia",
      "display" : "General anesthesia",
      "definition" : "Generel anæstesi / SNOMED-CT: 50697003"
    },
    {
      "code" : "gen_anesthesia_spc",
      "display" : "General anasthesia after insufficient local anasthesia and/or central block",
      "definition" : "Generel anæstesi efter insufficient regional anæstesi og/eller central blokade"
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
      "concept" : [
        {
          "code" : "spinal",
          "display" : "Spinal",
          "definition" : "Spinal"
        },
        {
          "code" : "epidural",
          "display" : "Epidural",
          "definition" : "Epidural",
          "concept" : [
            {
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
            }
          ]
        }
      ]
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
    }
  ]
}

```

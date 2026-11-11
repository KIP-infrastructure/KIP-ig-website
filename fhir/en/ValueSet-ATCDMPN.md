# ATC DMPN - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ATC DMPN**

## ValueSet: ATC DMPN 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ATCDMPN | *Version*:2.27.3 |
| Active as of 2022-07-14 | *Computable Name*:ATCDMPN |

 
ATC koder DMPN behandling. Erstattet af nyt VS fra okt. 2024 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ATCDMPN",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ATCDMPN",
  "version" : "2.27.3",
  "name" : "ATCDMPN",
  "title" : "ATC DMPN",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "ATC koder DMPN behandling. Erstattet af nyt VS fra okt. 2024",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
      "concept" : [{
        "code" : "B01AC06",
        "display" : "Acetylsalicylsyre (ASA)"
      },
      {
        "code" : "L01XX35",
        "display" : "Anagrelide"
      },
      {
        "code" : "L01AB01",
        "display" : "Busulfan (Myleran)"
      },
      {
        "code" : "L01XX05",
        "display" : "Hydroxcarbamid"
      },
      {
        "code" : "C10AA",
        "display" : "Statiner"
      },
      {
        "code" : "L01XH",
        "display" : "HDAC hæmmer"
      },
      {
        "code" : "L03AB",
        "display" : "Interferon"
      },
      {
        "code" : "L01EJ01",
        "display" : "Ruxolitinib"
      },
      {
        "code" : "L04AA",
        "display" : "JAK-2 inhibitorer"
      },
      {
        "code" : "B01A",
        "display" : "Anden blodfortyndende behandling"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentUnspecified",
      "concept" : [{
        "code" : "incision_vein",
        "display" : "Venesection"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden behandling"
      }]
    }]
  }
}

```

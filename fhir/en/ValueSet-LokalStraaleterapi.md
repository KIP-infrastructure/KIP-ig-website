# Præoperativ lokal stråleterapi ved malign indikation for TES - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Præoperativ lokal stråleterapi ved malign indikation for TES**

## ValueSet: Præoperativ lokal stråleterapi ved malign indikation for TES 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LokalStraaleterapi | *Version*:2.27.3 |
| Active as of 2022-10-13 | *Computable Name*:LokalStraaleterapi |

 
Præoperativ lokal stråleterapi ved malign indikation for TES 

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
  "id" : "LokalStraaleterapi",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LokalStraaleterapi",
  "version" : "2.27.3",
  "name" : "LokalStraaleterapi",
  "title" : "Præoperativ lokal stråleterapi ved malign indikation for TES",
  "status" : "active",
  "date" : "2022-10-13T00:00:00+02:00",
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
  "description" : "Præoperativ lokal stråleterapi ved malign indikation for TES",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentType",
      "concept" : [{
        "code" : "neoadjuvant",
        "display" : "Neoadjuverende/downsizing"
      },
      {
        "code" : "watchfull_waiting",
        "display" : "Watchfull waiting"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden indikation"
      }]
    }]
  }
}

```

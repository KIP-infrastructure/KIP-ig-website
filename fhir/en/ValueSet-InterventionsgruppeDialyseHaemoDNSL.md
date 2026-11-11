# Interventionsgruppe Hæmodialyse (DNSL) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Interventionsgruppe Hæmodialyse (DNSL)**

## ValueSet: Interventionsgruppe Hæmodialyse (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/InterventionsgruppeDialyseHaemoDNSL | *Version*:2.27.2 |
| Active as of 2024-01-10 | *Computable Name*:InterventionsgruppeDialyseHaemoDNSL |

 
Interventionsgruppe Hæmodialyse (DNSL) 

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
  "id" : "InterventionsgruppeDialyseHaemoDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/InterventionsgruppeDialyseHaemoDNSL",
  "version" : "2.27.2",
  "name" : "InterventionsgruppeDialyseHaemoDNSL",
  "title" : "Interventionsgruppe Hæmodialyse (DNSL)",
  "status" : "active",
  "date" : "2024-01-10T00:00:00+02:00",
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
  "description" : "Interventionsgruppe Hæmodialyse (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Interventionsgruppe",
      "concept" : [{
        "code" : "310",
        "display" : "Hæmodialyse"
      },
      {
        "code" : "110",
        "display" : "Genvunden funktion"
      },
      {
        "code" : "100",
        "display" : "Ophør med aktiv behandling"
      }]
    }]
  }
}

```

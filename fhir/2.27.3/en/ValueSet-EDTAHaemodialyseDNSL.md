# EDTA koder Hæmodialyse (DNSL) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EDTA koder Hæmodialyse (DNSL)**

## ValueSet: EDTA koder Hæmodialyse (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EDTAHaemodialyseDNSL | *Version*:2.27.3 |
| Active as of 2024-01-31 | *Computable Name*:EDTAHaemodialyseDNSL |

 
EDTA koder Hæmodialyse (DNSL) 

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
  "id" : "EDTAHaemodialyseDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EDTAHaemodialyseDNSL",
  "version" : "2.27.3",
  "name" : "EDTAHaemodialyseDNSL",
  "title" : "EDTA koder Hæmodialyse (DNSL)",
  "status" : "active",
  "date" : "2024-01-31T00:00:00+02:00",
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
  "description" : "EDTA koder Hæmodialyse (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EDTACodes",
      "concept" : [{
        "code" : "EDTA10",
        "display" : "EDTA 10, Center-hæmodialyse"
      },
      {
        "code" : "EDTA11",
        "display" : "EDTA 11, Limited-care dialyse"
      },
      {
        "code" : "EDTA20",
        "display" : "EDTA 20, Hjemme-hæmodialyse"
      }]
    }]
  }
}

```

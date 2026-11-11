# EDTA koder Peritonedialyse (DNSL) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EDTA koder Peritonedialyse (DNSL)**

## ValueSet: EDTA koder Peritonedialyse (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EDTAPeritonedialyseDNSL | *Version*:2.27.2 |
| Active as of 2024-01-31 | *Computable Name*:EDTAPeritonedialyseDNSL |

 
EDTA koder Peritonedialyse (DNSL) 

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
  "id" : "EDTAPeritonedialyseDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EDTAPeritonedialyseDNSL",
  "version" : "2.27.2",
  "name" : "EDTAPeritonedialyseDNSL",
  "title" : "EDTA koder Peritonedialyse (DNSL)",
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
  "description" : "EDTA koder Peritonedialyse (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EDTACodes",
      "concept" : [{
        "code" : "EDTA30",
        "display" : "EDTA 30, IPD-dialyse (hospital)"
      },
      {
        "code" : "EDTA40",
        "display" : "EDTA 40, CAPD-dialyse"
      },
      {
        "code" : "EDTA41",
        "display" : "EDTA 41, APD-dialyse"
      },
      {
        "code" : "EDTA45",
        "display" : "EDTA 45, Blandet PDHD-dialyse"
      },
      {
        "code" : "EDTA46a",
        "display" : "EDTA46a, Assisteret CAPD (kun professionel)"
      },
      {
        "code" : "EDTA46b",
        "display" : "EDTA46b, Assisteret APD (kun professionel)"
      }]
    }]
  }
}

```

# EDTA koder Transplantation (DNSL) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EDTA koder Transplantation (DNSL)**

## ValueSet: EDTA koder Transplantation (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EDTATransplantationDNSL | *Version*:2.27.1 |
| Active as of 2024-01-10 | *Computable Name*:EDTATransplantationDNSL |

 
EDTA koder Transplantation (DNSL) 

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
  "id" : "EDTATransplantationDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EDTATransplantationDNSL",
  "version" : "2.27.1",
  "name" : "EDTATransplantationDNSL",
  "title" : "EDTA koder Transplantation (DNSL)",
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
  "description" : "EDTA koder Transplantation (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EDTACodes",
      "concept" : [{
        "code" : "EDTA70",
        "display" : "EDTA 70, Grafttab, irreversibelt (årsag ukendt)"
      },
      {
        "code" : "EDTA71",
        "display" : "EDTA 71, Grafttab, hyperakut rejektion"
      },
      {
        "code" : "EDTA72",
        "display" : "EDTA 72, Grafttab, rejektion (med immunosuppressiv beh.)"
      },
      {
        "code" : "EDTA73",
        "display" : "EDTA 73, Grafttab, rejektion (uden immunosuppressiv beh.)"
      },
      {
        "code" : "EDTA74",
        "display" : "EDTA 74, Grafttab, reccurent primær renal lidelse"
      },
      {
        "code" : "EDTA75",
        "display" : "EDTA 75, Grafttab, vasculær/ureter operativt problem"
      },
      {
        "code" : "EDTA76",
        "display" : "EDTA 76, Grafttab, vasculær thrombose uden op problem"
      },
      {
        "code" : "EDTA77",
        "display" : "EDTA 77, Grafttab, infektion"
      },
      {
        "code" : "EDTA78",
        "display" : "EDTA 78, Grafttab, fjernelse af fungerende graft"
      },
      {
        "code" : "EDTA79",
        "display" : "EDTA 79, Grafttab, ikke-fungerende graft"
      }]
    }]
  }
}

```

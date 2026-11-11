# Interventionsgruppe Transplantation Excl (DNSL) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Interventionsgruppe Transplantation Excl (DNSL)**

## ValueSet: Interventionsgruppe Transplantation Excl (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/InterventionsgruppeTransplantExclDNSL | *Version*:2.27.2 |
| Active as of 2024-01-10 | *Computable Name*:InterventionsgruppeTransplantExclDNSL |

 
Interventionsgruppe Transplantation eksklusiv transplantation udfaldet (DNSL) 

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
  "id" : "InterventionsgruppeTransplantExclDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/InterventionsgruppeTransplantExclDNSL",
  "version" : "2.27.2",
  "name" : "InterventionsgruppeTransplantExclDNSL",
  "title" : "Interventionsgruppe Transplantation Excl (DNSL)",
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
  "description" : "Interventionsgruppe Transplantation eksklusiv transplantation udfaldet (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Interventionsgruppe",
      "concept" : [{
        "code" : "620",
        "display" : "Nyrestart"
      },
      {
        "code" : "630",
        "display" : "Rejektion"
      },
      {
        "code" : "650",
        "display" : "Grafttab"
      },
      {
        "code" : "120",
        "display" : "Afsendelse til"
      },
      {
        "code" : "130",
        "display" : "Modtagelse fra"
      }]
    }]
  }
}

```

# Mors Diagnosekode - Forskelligt (DNSL) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosekode - Forskelligt (DNSL)**

## ValueSet: Mors Diagnosekode - Forskelligt (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseForskelligtDNSL | *Version*:2.27.3 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnoseForskelligtDNSL |

 
Mors Diagnosekode - Forskelligt (DNSL) 

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
  "id" : "MorsDiagnoseForskelligtDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseForskelligtDNSL",
  "version" : "2.27.3",
  "name" : "MorsDiagnoseForskelligtDNSL",
  "title" : "Mors Diagnosekode - Forskelligt (DNSL)",
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
  "description" : "Mors Diagnosekode - Forskelligt (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosekoder",
      "concept" : [{
        "code" : "DD489",
        "display" : "DD489: Neopl uden specifikation og lokalisation"
      },
      {
        "code" : "DD729",
        "display" : "DD729: Sygdomme i hvide blodlegemer uden specifikation"
      },
      {
        "code" : "DF039",
        "display" : "DF039: Demens uden specifikation"
      },
      {
        "code" : "DJ449",
        "display" : "DJ449: Kronisk obstruktiv lungesygdom uden specifikation"
      },
      {
        "code" : "DK281",
        "display" : "DK281: Ulcus gastrojejunale pepticum acutum m perforation"
      },
      {
        "code" : "DK631",
        "display" : "DK631: Perforatio intestini non traumatica"
      },
      {
        "code" : "DK668",
        "display" : "DK668: Sygdom i bughinde, andre specificerede"
      },
      {
        "code" : "DK859",
        "display" : "DK859: Pancreatitis acuta"
      },
      {
        "code" : "DR649",
        "display" : "DR649: Cachexia"
      },
      {
        "code" : "DR999",
        "display" : "DR999: Mors uden specifkation"
      }]
    }]
  }
}

```

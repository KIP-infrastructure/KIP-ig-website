# Forsørgelsesgrundlag (RETSPSYK) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Forsørgelsesgrundlag (RETSPSYK)**

## ValueSet: Forsørgelsesgrundlag (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ForsoergelsesgrundlagRETSPSYK | *Version*:2.27.3 |
| Active as of 2022-09-30 | *Computable Name*:ForsoergelsesgrundlagRETSPSYK |

 
Forsørgelsesgrundlag (RETSPSYK) 

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
  "id" : "ForsoergelsesgrundlagRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ForsoergelsesgrundlagRETSPSYK",
  "version" : "2.27.3",
  "name" : "ForsoergelsesgrundlagRETSPSYK",
  "title" : "Forsørgelsesgrundlag (RETSPSYK)",
  "status" : "active",
  "date" : "2022-09-30T00:00:00+02:00",
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
  "description" : "Forsørgelsesgrundlag (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EconomicSupport",
      "concept" : [{
        "code" : "salary",
        "display" : "Lønindkomst (Inkl. sygepenge/understøttelse)"
      },
      {
        "code" : "education_support",
        "display" : "Overførselsindkomst - SU/uddannelsesstøtte/uddannelsesløn"
      },
      {
        "code" : "cash_assistance",
        "display" : "Overførselsindkomst - Kontanthjælp"
      },
      {
        "code" : "pension",
        "display" : "Overførselsindkomst - Pension/Førtidspension"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen indkomst"
      }]
    }]
  }
}

```

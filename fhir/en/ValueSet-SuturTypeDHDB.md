# Sutur type; selvlåsende (DHDB) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sutur type; selvlåsende (DHDB)**

## ValueSet: Sutur type; selvlåsende (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SuturTypeDHDB | *Version*:2.27.0 |
| Active as of 2022-07-20 | *Computable Name*:SuturTypeDHDB |

 
Suturtype; selvlåsende (DHDB) 

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
  "id" : "SuturTypeDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SuturTypeDHDB",
  "version" : "2.27.0",
  "name" : "SuturTypeDHDB",
  "title" : "Sutur type; selvlåsende (DHDB)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Suturtype; selvlåsende (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing",
      "concept" : [{
        "code" : "not_self_locking",
        "display" : "Ikke-selvlåsende"
      },
      {
        "code" : "v_loc",
        "display" : "Selvlåsende (V-LOC)"
      },
      {
        "code" : "stratafix",
        "display" : "Selvlåsende (Stratafix)"
      },
      {
        "code" : "self_locking",
        "display" : "Selvlåsende (anden, uspecifik)"
      }]
    }]
  }
}

```

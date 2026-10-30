# Interventionsgruppe Peritonealdialyse (DNSL) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Interventionsgruppe Peritonealdialyse (DNSL)**

## ValueSet: Interventionsgruppe Peritonealdialyse (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/InterventionsgruppeDialysePeritonealDNSL | *Version*:2.27.1 |
| Active as of 2024-01-10 | *Computable Name*:InterventionsgruppeDialysePeritonealDNSL |

 
Interventionsgruppe Peritonealdialyse (DNSL) 

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
  "id" : "InterventionsgruppeDialysePeritonealDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/InterventionsgruppeDialysePeritonealDNSL",
  "version" : "2.27.1",
  "name" : "InterventionsgruppeDialysePeritonealDNSL",
  "title" : "Interventionsgruppe Peritonealdialyse (DNSL)",
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
  "description" : "Interventionsgruppe Peritonealdialyse (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Interventionsgruppe",
      "concept" : [{
        "code" : "510",
        "display" : "Peritonealdialyse"
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

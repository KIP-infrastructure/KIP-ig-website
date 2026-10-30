# Mors Diagnosekode - Infektioner (DNSL) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosekode - Infektioner (DNSL)**

## ValueSet: Mors Diagnosekode - Infektioner (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseInfektionerDNSL | *Version*:2.27.1 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnoseInfektionerDNSL |

 
Mors Diagnosekode - Infektioner (DNSL) 

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
  "id" : "MorsDiagnoseInfektionerDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseInfektionerDNSL",
  "version" : "2.27.1",
  "name" : "MorsDiagnoseInfektionerDNSL",
  "title" : "Mors Diagnosekode - Infektioner (DNSL)",
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
  "description" : "Mors Diagnosekode - Infektioner (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosekoder",
      "concept" : [{
        "code" : "DA162",
        "display" : "DA162: Lungetuberkulose u angivelse af bakt eller hist verif"
      },
      {
        "code" : "DA188",
        "display" : "DA188: Tuberkulose i andre specificerede organer"
      },
      {
        "code" : "DA419",
        "display" : "DA419: Septikæmi uden specifikation"
      },
      {
        "code" : "DB349",
        "display" : "DB349: Virusinfektion uden specifikation"
      },
      {
        "code" : "DB999",
        "display" : "DB999: Andre og ikke specificerede infektiøse sygdomme"
      },
      {
        "code" : "DJ129",
        "display" : "DJ129: Viruspneumoni uden specifikation"
      },
      {
        "code" : "DJ159",
        "display" : "DJ159: Bakteriel pneumoni uden specifikation"
      },
      {
        "code" : "DJ168",
        "display" : "DJ168: Pneumonier forårsaget af andre specificerede infekt agentia"
      },
      {
        "code" : "DK650",
        "display" : "DK650: Peritonitis acuta"
      }]
    }]
  }
}

```

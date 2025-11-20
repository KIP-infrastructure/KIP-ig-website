# Mors Diagnosekode - Infektioner (DNSL) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosekode - Infektioner (DNSL)**

## ValueSet: Mors Diagnosekode - Infektioner (DNSL) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseInfektionerDNSL | *Version*:2.14.1 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnoseInfektionerDNSL |

 
Mors Diagnosekode - Infektioner (DNSL) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "MorsDiagnoseInfektionerDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseInfektionerDNSL",
  "version" : "2.14.1",
  "name" : "MorsDiagnoseInfektionerDNSL",
  "title" : "Mors Diagnosekode - Infektioner (DNSL)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-01-10T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Mors Diagnosekode - Infektioner (DNSL)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosekoder",
        "concept" : [
          {
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
          }
        ]
      }
    ]
  }
}

```

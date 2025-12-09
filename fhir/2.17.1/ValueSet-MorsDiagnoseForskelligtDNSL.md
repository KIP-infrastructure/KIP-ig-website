# Mors Diagnosekode - Forskelligt (DNSL) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosekode - Forskelligt (DNSL)**

## ValueSet: Mors Diagnosekode - Forskelligt (DNSL) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseForskelligtDNSL | *Version*:2.17.1 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnoseForskelligtDNSL |

 
Mors Diagnosekode - Forskelligt (DNSL) 

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
  "id" : "MorsDiagnoseForskelligtDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseForskelligtDNSL",
  "version" : "2.17.1",
  "name" : "MorsDiagnoseForskelligtDNSL",
  "title" : "Mors Diagnosekode - Forskelligt (DNSL)",
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
  "description" : "Mors Diagnosekode - Forskelligt (DNSL)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosekoder",
        "concept" : [
          {
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
          }
        ]
      }
    ]
  }
}

```

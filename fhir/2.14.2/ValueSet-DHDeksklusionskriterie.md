# DHD eksklusionskriterie - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DHD eksklusionskriterie**

## ValueSet: DHD eksklusionskriterie (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DHDeksklusionskriterie | *Version*:2.14.2 |
| Active as of 2022-06-22 | *Computable Name*:DHDeksklusionskriterie |

 
Patienten skal ikke indberettes til DHD, fordi patienten opfylder et af følgende eksklusionskriterier 

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
  "id" : "DHDeksklusionskriterie",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DHDeksklusionskriterie",
  "version" : "2.14.2",
  "name" : "DHDeksklusionskriterie",
  "title" : "DHD eksklusionskriterie",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-22T00:00:00+02:00",
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
  "description" : "Patienten skal ikke indberettes til DHD, fordi patienten opfylder et af følgende eksklusionskriterier",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DHDeksklusionskriterie",
        "concept" : [
          {
            "code" : "DHDA1",
            "display" : "A1: Patienten har tidligere kendt og korrekt diagnosticeret og behandlet hjertesvigt"
          },
          {
            "code" : "DHDA2",
            "display" : "A2: Patienter med akut myokardieinfarkt (AMI) med nedsat ejection fraction (EF/LVEF), hvor AMI er A-diagnosen"
          },
          {
            "code" : "DHDA3",
            "display" : "A3: Patienten har ikke korrigerbar strukturel hjertesygdom og deraf følgende hjertesvigt"
          },
          {
            "code" : "DHDA4",
            "display" : "A4: Primær årsag til hjertesvigt er hjerteklapsygdom og deraf følgende hjertesvigt"
          },
          {
            "code" : "DHDA5",
            "display" : "A5: Primær årsag til hjertesvigt er hurtig hjerteryme (ofte atrieflimren) (kræver kardiologisk vurdering)"
          },
          {
            "code" : "DHDA6",
            "display" : "A6: Patienten har cor pulmunale"
          },
          {
            "code" : "DHDA7",
            "display" : "A7: Patienten har isoleret højresidig hjertesvigt"
          },
          {
            "code" : "DHDA8",
            "display" : "A8: Patienten har gået hos privatpraktiserende speciallæge i kardiologi og er blevet diagnosticeret og behandlet hos denne"
          },
          {
            "code" : "DHDA9",
            "display" : "A9: A-diagnose er ikke hjertesvigt"
          },
          {
            "code" : "DHDA10",
            "display" : "A10: Patientforløb flyttet i KIP til behandlingsansvarlig afd"
          }
        ]
      }
    ]
  }
}

```
